 <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Student </h5>
             </div>
             <div class="modal-body">
                 <form enctype="multipart/form-data">
                     <input type="text" wire:model="edit_id">
                     <label for="exampleFormControlInput1" class="form-lable">Name</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="name">
                     <label for="exampleFormControlInput2" class="form-lable">Email</label>
                     <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="email">
                     <label for="image" class="form-lable">Image</label>
                     <input type="file" id="image" class="form-control" wire:model="image">
             </div>
             <div class="modal-footer">
                 <button type="button" wire:click.prevent="cancel" class="btn btn-secondary"
                     data-bs-dismiss="modal">Close</button>
                 <button type="submit" wire:click="update" class="btn btn-primary" data-bs-dismiss="modal">Update
                     changes</button>
                 </form>

             </div>
         </div>
     </div>
 </div>

