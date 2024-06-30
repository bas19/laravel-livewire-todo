<div>
    <div class="p-10 bg-red">
        <div class="bg-gray-300 p-4">
            Todo List
            <br>
            <form wire:submit='add'>
                <input type="text" wire:model="form.name" placeholder="Add todo"/>
                <button type="submit" class="bg-blue-300 pa-5 px-5 text-red-900">Add</button>
            </form>
        </div>
        <ul class="bg-grey-100 p-4">
            @foreach( $todos as $item)
                <li class="bg-gray-100 p-2">
                    {{ $item->name }}
                    <button wire:click='delete({{$item->id}})' class="bg-blue-300 pa-2 px-5 float-right text-red-900 rounded">X</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
