<div>
    <div class="comment-form">
        <h5>Add Comment :</h5>
        <div class="form">
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea placeholder="Your Comment" wire:model.defer="fields.commenter" name="commenter"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" wire:model.defer="fields.name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" wire:model.defer="fields.email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button class="btn-curve btn-color btn-lg"
                              wire:click.prevent="submit()"
                             >
                             <span>Submit</span>
                           </button>
                               
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
