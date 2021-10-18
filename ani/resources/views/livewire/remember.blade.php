<div>
    <div class="container arala">
        <div class="ortala mb-4">
            <div class="baslik">ANI</div> KAYIT
        </div>
        <form action="{{ route('remembrance') }} " method="POST">
            @csrf
            <div class="form-group">
                <div>
                    <input type="text" placeholder="Başlık" value="{{ old('title') }}" name="title"
                        class="form-control">
                </div>
                <div class="pt-4">
                    <div style="text-align: end">
                        {{ 65535 - $remembranceLength }}
                    </div>
                    <textarea class="form-control" wire:model="remembrance" maxlength="65535" placeholder="Anınız"
                        name="remembrance" cols="30" rows="15"></textarea>
                    
                </div>
                <div style="width: 100%" class="butonyer pb-5"><button class="buton">gönder</button></div>
            </div>
        </form>
    </div>

</div>
