<div class="modal fade" id="delete_programs{{ $program['id'] }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <form action="{{ route('programs.destroy', $program['id']) }}" method="post">
           @method('DELETE')
           @csrf
           <div class="modal-content">
               <div class="modal-header">
                   <h5 style="font-family: 'Cairo', sans-serif;"
                       class="modal-title" id="exampleModalLabel">حذف برنامج</h5>
                   <button type="button" class="close" data-dismiss="modal"
                           aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <p> هل انت متاكد من الحذف سيتم حذف جميع المشاريع التابعه لبرنامج <span class="text-danger">{{ $program['name'] }}</span></p>
                   <input type="hidden" name="id" value="{{ $program['id'] }}">
                   <input type="hidden" name="file_name" value="{{ $program['name'] }}">
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary"
                           data-dismiss="modal">اغلاق</button>
                   <button type="submit"
                           class="btn btn-danger">حذف</button>
               </div>
           </div>
       </form>
   </div>
</div>