<!-- Sidebar -->
<div class="col-sm-4">
    <div class="sidebar-right">
        {{-- accordion --}}
        <div class="sidebar-section">
            {{-- setup accordion id={headingbab} data-target,aria-controls --}}
            @include('course.layout.materi.dropdownside')
        </div>
    </div>
</div>
<!-- End Sidebar -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary fixed-bottom btnModal" data-toggle="modal" data-target="#exampleModalLong"
    style="display: none">
    <i class="fa fa-th-list"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                {{-- close --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('course.layout.materi.dropdownside')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        if ($(document).width() > 768) {
            $('#exampleModalLong').remove()
            $('.btnModal').remove()
        } else if ($('.sidebar-right').length && $(document).width() < 768) {
            $('.btnModal').css('display', 'inline')
            $('.sidebar-right').remove()
        }

    });
</script>
