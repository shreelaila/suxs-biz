<style>
    .comp-alerts {
        position: fixed;
        z-index: 10000;
        top: 0;
        right: 0;
        left: 0;
        width: fit-content;
        margin: 0 auto;
    }
    </style>
    @if (session()->has('error'))
    <!-- Danger Alert -->
    <script>
        let msg = "{{ session()->get('error') }}";
        responseMessage('red', 'Alert!', msg);
    </script>
    @endif

    @if (session()->has('success'))
    <!-- Danger Alert -->
        <script>
            let msg = "{{ session()->get('success') }}";
            responseMessage('green', 'Success', msg);
        </script>

    @endif
    @if (session()->has('custom_success'))
    <!-- Danger Alert -->
        <script>
            let msg = "{{ session()->get('custom_success') }}";
            responseMessage('green', 'Success', msg);

            setTimeout(function(){
                window.location.reload();
            }, 4000);
        </script>
    @endif
