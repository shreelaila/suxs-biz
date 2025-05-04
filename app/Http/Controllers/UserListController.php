<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use Carbon\Carbon;
use App\Models\Cities;
use App\Models\States;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserListController extends Controller

{
    public function index(Request $request)
    {
        $this->data['menu'] = array(
            'level1' => 'configuration',
            'level2' => 'configuration',
            'level3' => 'user'
        );
        $this->data['breadcrumbs'] = array(
            'page_title' => 'Users',
            'addbutton' => [
                'button' => route('user.manage_user_add'),
                'title' => 'Add User'
            ],
            'links' => [
                array('link' => '', 'page' => 'Users'),
                array('link' => route('user.manage_user_lists'), 'page' => 'Manage User', 'active_link' => true)
            ]
        );
        $query  = UserList::all();
        if ($request->ajax() && $request->has('delete_user')) {
            try {
                $userId = decrypt($request->deleteId);
                $exists = UserList::where('id', $userId)->exists();
                if ($exists) {
                    $deletedRows = UserList::where('id', $userId)->delete();
                    if ($deletedRows) {
                        return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
                    }
                } else {
                    return response()->json(['success' => false, 'message' => 'User not found.']);
                }
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Failed to delete the user.']);
            }
        }
        if ($request->ajax()) {
            return DataTables::of($query)
                ->addColumn('action', function ($data) {
                    $viewUrl = route('user.user_view', ['id' => encrypt($data->id)]);
                    $editUrl = route('user.user_edit', ['id' => encrypt($data->id)]);
                    $mobile = $data->contact_number;


                    return '<div class="btn-reveal-trigger position-static">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent">
                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z">
                                </path>
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end py-2">
                            <a class="dropdown-item" href="' . $viewUrl . '"><i class="far fa-eye"></i> View</a>
                            <a class="dropdown-item" href="' . $editUrl . '"><i class="fas fa-edit"></i> Edit</a>
                              <a class="dropdown-item changeMobileBtn" href="#" data-id="' . encrypt($data->id) . '" data-mobile="' . $mobile . '" data-bs-toggle="modal" data-bs-target="#changeMobileModal">
                <i class="fas fa-phone-alt"></i> Change Mobile
            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger deleteRow" data-id="' . encrypt($data->id) . '" href="#"><i class="fas fa-trash-alt"></i>  Delete</a>
                        </div>
                    </div>';
                })

                ->rawColumns(['action', 'opreating_hours'])
                ->make(true);
        }
        return view('pages.configuration.manage_user_lists')->with($this->data);
    }

    public function addUser(Request $request)
    {
        $this->data['menu'] = array(
            'level1' => 'configuration',
            'level2' => 'configuration',
            'level3' => 'user'
        );
        $this->data['breadcrumbs'] = array(
            'page_title' => 'Branch',
            'back' => (isset($request->prv)) ? $request->prv : route('user.manage_user_lists'),
            'links' => [
                array('link' => '', 'page' => 'Configuration'),
                array('link' => '', 'page' => 'User'),
                array('link' => route('user.manage_user_add'), 'page' => ' Add User ', 'active_link' => true)
            ]
        );

        if ($request->ajax()) {
            if ($request->ax_states) {

                $countryId = Crypt::decrypt($request->countries_id);
                $states = State::where('country_id', $countryId)->get();
                $response = $states->map(function ($state) {
                    return [
                        'id' => Crypt::encrypt($state->id),
                        'state_name' => $state->state_name
                    ];
                });
                return response()->json($response);
            }
            if ($request->ax_cities) {
                $stateId = Crypt::decrypt($request->state_id);
                $cities = Cities::where('state_id', $stateId)->get();
                $response = $cities->map(function ($city) {
                    return [
                        'id' => Crypt::encrypt($city->id),
                        'city_name' => $city->city_name
                    ];
                });
                return response()->json($response);
            }
        }

        if ($request->user_id) {
            $validator = Validator::make(
                $request->all(),
                [
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'contactNumber' => 'required',
                    'dob' => 'required',
                    'gender' => 'required',
                    'address_1' => 'required',
                    'address_2' => 'required',
                    'country' => 'required',
                    'state' => 'required',
                    'city' => 'required',
                    'pincode' => 'required',
                    'shop' => 'required',
                    'pan' => 'required',
                    'aadhar' => 'required',
                    'profile' => 'required',
                    // 'country' => 'required',


                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }
            try {
                $user = new UserList();
                $user->firstname = $request->firstName;
                $user->lastname = $request->lastName;
                $user->contact_number = $request->contactNumber;
                $user->date_of_birth = $request->dob;
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->address_line1 = $request->address_1;
                $user->address_line2 = $request->address_2;
                $user->country = Crypt::decrypt($request->country);
                $user->state = Crypt::decrypt($request->state);
                $user->city = Crypt::decrypt($request->city);
                $user->role = $request->role;
                $user->pin_code = $request->pincode;

                // Upload files to S3 if present
                if ($request->hasFile('shop')) {
                    $user->shop = Storage::disk('s3')->put('shop', $request->file('shop'));
                }

                if ($request->hasFile('pan')) {
                    $user->pan = Storage::disk('s3')->put('pan', $request->file('pan'));
                }

                if ($request->hasFile('aadhar')) {
                    $user->aadhar = Storage::disk('s3')->put('aadhar', $request->file('aadhar'));
                }

                if ($request->hasFile('profile')) {
                    $user->profile_picture = Storage::disk('s3')->put('profile', $request->file('profile'));
                }

                $user->save();

                session()->flash('success', 'User added successfully.');
                return redirect()->route('user.manage_user_lists');
            } catch (\Exception $e) {
                dd($e->getMessage());
                Log::channel('laravel')->error($e->getMessage());
                session()->flash('error', 'Something went wrong. Please try again later.');
                return redirect()->back();
            }
        }

        $this->data['countries'] = Countries::all();
        return view('pages.configuration.user_add')->with($this->data);
    }
    public function editUser(Request $request)
    {
        $this->data['menu'] = [
            'level1' => 'configuration',
            'level2' => 'configuration',
            'level3' => 'user'
        ];

        $this->data['breadcrumbs'] = [
            'page_title' => 'Branch',
            'back' => $request->prv ?? route('user.manage_user_lists'),
            'links' => [
                ['link' => '', 'page' => 'Configuration'],
                ['link' => '', 'page' => 'User'],
                ['link' => route('user.user_edit'), 'page' => ' Add User ', 'active_link' => true]
            ]
        ];

        // Handle AJAX for states and cities
        if ($request->ajax()) {
            if ($request->ax_states) {
                $countryId = Crypt::decrypt($request->countries_id);
                $states = State::where('country_id', $countryId)->get();
                $response = $states->map(fn($state) => [
                    'id' => Crypt::encrypt($state->id),
                    'state_name' => $state->state_name
                ]);
                return response()->json($response);
            }

            if ($request->ax_cities) {
                $stateId = Crypt::decrypt($request->state_id);
                $cities = Cities::where('state_id', $stateId)->get();
                $response = $cities->map(fn($city) => [
                    'id' => Crypt::encrypt($city->id),
                    'city_name' => $city->city_name
                ]);
                return response()->json($response);
            }
        }

        // Handle form POST
        if ($request->edit_user_id) {
            $validator = Validator::make($request->all(), [
                'firstName' => 'required',
                'lastName' => 'required',
                'contactNumber' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'address_1' => 'required',
                'address_2' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'pincode' => 'required',
                'shop' => 'required',
                'pan' => 'required',
                'aadhar' => 'required',
                'profile' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            try {
                $user = UserList::findOrFail(decrypt($request->id));
                $user->firstName = $request->firstname;
                $user->lastName = $request->lastname;
                $user->contactNumber = $request->contact_number;
                $user->date_of_birth = $request->dob;
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->address_1 = $request->address_line1;
                $user->address_2 = $request->address_line2;
                $user->country = Crypt::decrypt($request->country);
                $user->state = Crypt::decrypt($request->state);
                $user->city = Crypt::decrypt($request->city);
                $user->role = $request->role;
                $user->pincode= $request->pin_code;

                // Upload files to S3
                if ($request->hasFile('branch_logo')) {
                    $user->profile_piceture = Storage::disk('s3')->put('branchLogo', $request->file('branch_logo'));
                }
                if ($request->hasFile('shop')) {
                    $user->shop = Storage::disk('s3')->put('shop', $request->file('shop'));
                }
                if ($request->hasFile('pan')) {
                    $user->pan = Storage::disk('s3')->put('pan', $request->file('pan'));
                }
                if ($request->hasFile('aadhar')) {
                    $user->aadhar = Storage::disk('s3')->put('aadhar', $request->file('aadhar'));
                }
                if ($request->hasFile('profile')) {
                    $user->profile_picture = Storage::disk('s3')->put('profile', $request->file('profile'));
                }

                $user->save();

                session()->flash('success', 'Branch Updated Successfully.');
                return redirect()->route('user.manage_user_lists');

            } catch (\Exception $e) {
                dd($e->getMessage());
                Log::channel('laravel')->error($e->getMessage());
                session()->flash('error', 'Something went wrong. Please try again later.');
                return redirect()->back();
            }
        }

        $this->data['countries'] = Countries::all();
        $this->data['states'] = State::all();
        $this->data['cities'] = Cities::all();
        $this->data['user'] = UserList::findOrFail(decrypt($request->id));

        return view('pages.configuration.user_edit')->with($this->data);
    }

    public function  viewUser(Request $request)
    {
        $this->data['menu'] = array(
            'level1' => 'configuration',
            'level2' => 'configuration',
            'level3' => 'user'
        );
        $this->data['breadcrumbs'] = array(
            'page_title' => 'Branch',
            'back' => (isset($request->prv)) ? $request->prv : route('user.manage_user_lists'),
            'links' => [
                array('link' => '', 'page' => 'Configuration'),
                array('link' => '', 'page' => 'User'),
                array('link' => route('user.manage_user_add'), 'page' => ' View User ', 'active_link' => true)
            ]
        );
        $this->data['user'] = UserList::with('cities', 'states', 'countries')->where('id', decrypt($request->id))->get()->first();
        return view('pages.configuration.view_user')->with($this->data);
    }
}
