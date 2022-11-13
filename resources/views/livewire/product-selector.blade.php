<div>
    @if($initialVariation)
        <livewire:product-variation-dropdown :variations="$initialVariation" />
    @endif
    @if($skuVariant)
        <div class="mt-3 font-semibold">
            Preço Final: {{ $skuVariant->formattedPrice() }}
        </div>
        <x-primary-button wire:click.prevent="addToCart" class="mt-4">
            Add to cart
        </x-primary-button>
    @endif
</div>
