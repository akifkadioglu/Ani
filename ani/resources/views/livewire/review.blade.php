<div>
    <div class="card p-5">
        <form action="{{ route('addreview', $data->id) }} " method="POST">
            @csrf
            <div class="review">Yorum yap</div>
            <div style="text-align: end">
                {{ 255 - $reviewlength }}
            </div>
            <input type="text" wire:model="review" name="review" maxlength="255"
                placeholder="Bu anı hakkında yorumunuz var mı?" class="form-control" style="width: 100%">
            <div style="width: 100%;text-align: end">
                <button class="review mt-4">Gönder</button>
            </div>
        </form>
    </div>
</div>
