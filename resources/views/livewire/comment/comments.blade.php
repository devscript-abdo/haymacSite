<div>
    <div class="comment-form">
        <h5>Add Comment :</h5>
        <div class="form">
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea placeholder="Your Comment" wire:model.defer="fields.commenter" name="commenter"
                              class="form-control @error('name') is-invalid @enderror"
                            ></textarea>
                            @error('commenter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input 
                                type="text"
                                placeholder="Your Name"
                                wire:model.defer="fields.name"
                                name="name"
                               class="form-control @error('name') is-invalid @enderror"
                            >
                            @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" wire:model.defer="fields.email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
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
