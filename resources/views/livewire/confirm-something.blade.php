<div>
    <x-jet-button type="button" wire:click="$set('displayingModal', true)" wire:loading.attr="disabled">
        Confirm Something
    </x-jet-button>

    <x-jet-dialog-modal wire:model="displayingModal">
        <x-slot name="title">
            Confirm Something
        </x-slot>

        <x-slot name="content">
            <div>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, vero maxime. Aliquam vero sed corrupti illo eligendi voluptates ipsum esse!
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('displayingModal', false)" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="confirmSomething" wire:loading.attr="disabled">
                Confirm
            </x-jet-button>
        </x-slot>


    </x-jet-dialog-modal>
</div>
