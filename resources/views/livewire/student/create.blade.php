 <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Add Student </h5>
             </div>
             <div class="modal-body">
                 <form enctype="multipart/form-data">
                     <label for="exampleFormControlInput1" class="form-lable">Name</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="name">
                     <label for="exampleFormControlInput2" class="form-lable">Email</label>
                     <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="email">
                     <label for="image" class="form-lable">Image</label>
                     <input type="file" id="image" class="form-control" wire:model="image">
                     <label for="date" class="form-lable">Date</label>
                     <input type="date" id="date" class="form-control" wire:model="date">
                     <label for="time" class="form-lable">time</label>
                     <input type="time" id="time" class="form-control" wire:model="time">
                     <label for="radio" class="form-lable">Radio Button </label><br>
                     <label for="mail">Mail</label>
                     <input type="radio" value="Mail" id="mail" name="gender" wire:model="gender">
                     <label for="femail">Femail</label>
                     <input type="radio" id="femail" value="Femail" name="gender" wire:model="gender">
                     <label for="other">Other</label>
                     <input type="radio" id="other" value="Other" name="gender" wire:model="gender"><br>
                     <label for="checkbox" class="form-lable" >Checkbox </label>
                     <input type="checkbox" id="checkbox" value="1"  wire:model="checkbox"><br>
                     <input type="color" class="form-control" name="color" wire:model="color"  >
                  <select class="form-control" name="city" id="city"  wire:model="city" >
                    <option value="">-Select-</option>
                    <option class="form-control" value="FSD">FSD</option>
                    <option class="form-control" value="BWP">BWP</option>
                  </select>


                     <label for="gallery" class="form-lable">image Gallery</label>
                     <input type="file" multiple id="gallery" class="form-control" wire:model="gallery">


             </div>
             <div class="modal-footer">
                 <button type="button" wire:click.prevent="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" wire:click.prevent="store" class="btn btn-primary" data-bs-dismiss="modal">Save
                     changes</button>
                 </form>

             </div>
         </div>
     </div>
 </div>
