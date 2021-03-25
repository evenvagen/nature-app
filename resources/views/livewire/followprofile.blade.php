<div>

    <tt> {{ $followers }} følgere</tt>
    <tt>|</tt>
    <tt>følger {{ $following }}</tt>

    <br>

    <button wire:click="follow" class="btn btn-dark btn-sm mt-3 px-5 text-warning">{{ $status }}</button>

</div>
