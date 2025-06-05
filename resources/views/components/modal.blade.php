<!-- The Modal for giving notification after sending message -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-black"></div>
            <!-- Modal body -->
            <div class="modal-body text-center" role="alert" aria-label="alert for successful delivery of message">
                @if(!isset($message))
                    <p class="pb-2">
                        {{ switchLanguages(' Thank you. Your message has been successfully sent. ',
                        'با تشکر از پیام شما، با موفقیت ارسال گردید.') }}

                    </p>
                @endif
                @if(isset($message))
                    <p class="pb-2">{{$message}} </p>
                @endif
                @if( session()->has('error'))
                    <i class="material-icons text-danger ">clear</i>
                @else
                    <i class="material-icons text-success ">done</i>
                @endif

            </div>
            <!-- Modal footer -->
            <div class="modal-footer bg-black"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Show the Modal on load
        $("#myModal").modal("show", {backdrop: "static"});
        // Hide the Modal
        setTimeout(() => {
            $("#myModal").modal("hide");
        }, 4000)
    });
</script>


