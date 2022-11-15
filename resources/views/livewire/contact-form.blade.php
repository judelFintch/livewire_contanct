<div>

    <form method="post" action="#" wire:submit.prevent="submit" >

        <div class="mb-3">

            <label for="name" class="form-label">Nom Complet</label>

            <input type="text" id="name" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" placeholder="Votre nom complet" >

            @error("name")
            <span class="text-danger">{{ $message }}</span>
            @enderror
            
        </div>

        <div class="mb-3">

            <label for="email" class="form-label">Adresse email</label>

            <input type="email" id="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre adresse email" >

            @error("email")
            <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="mb-3">

            <label for="msg" class="form-label">Message</label>

            <textarea id="msg" wire:model.defer="msg" class="form-control @error('msg') is-invalid @enderror" rows="4" placeholder="Votre message ici" ></textarea>

            @error("msg")
            <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary" >Envoyer le message</button>

    </form>

</div>
