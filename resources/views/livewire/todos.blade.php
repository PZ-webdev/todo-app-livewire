<div>
    <div class="mb-5 ">
        <div class="form-group d-flex">
            <input type="text" name="addTodo" class="form-control" id="addTodo"
                placeholder="{{__('What needs to be done?')}}" wire:model="title" wire:keydown.enter="addTodo">
            <button class="btn btn-primary ml-3" wire:click="addTodo" type="submit">{{__('Add')}}</button>
        </div>
        @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
        @endif
    </div>

    <ul class="list-group">
        @foreach ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <input type="checkbox" class="mr-4" style="corsor: pointer" wire:change="toggleTodo({{$todo->id}})"
                    {{$todo->completed ? 'checked' : ''}}>
                <a href="#" class="{{$todo->completed ? 'completed' : ''}}">{{$todo->title}}</a>
            </div>
            <div>
                <button onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                    class="btn btn-sm btn-danger" wire:click="deleteTodo({{$todo->id}})">&times;</button>
            </div>
        </li>
        @endforeach
    </ul>

    <div>
        {{ $todos->links('livewire.pagination-links-view') }}
    </div>
</div>
