<div x-data="{todos: @entangle('todos').live, todo: @entangle('todo')}">
    <h2>{{$title}}</h2>
    <ul>
        @foreach($todos as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
    <div class="flex gap-4">
        <form @submit.prevent="todos.push(todo); todo = 'After submit by Alpine'">
            <input type="text" x-model="todo"> <br>
            <button type="submit" class="bg-gray-700 p-2 text-white">Add Todo with Alpine</button>
        </form>

        <form wire:submit="add">
            <input type="text" wire:model.live="todo"> <br>
            <button type="submit" class="bg-gray-700 p-2 text-white">Add Todo with Livewire</button>
        </form>
    </div>
    <hr>
    <div>
        <h4>Rendered by <span>Alpine</span> (no binding)</h4>
        <div class="flex gap-4 items-center">
            <span x-text="todo"></span>
            <input type="text" :value="todo">
        </div>
    </div>
    <div>
        <h4>Rendered by <span>Livewire</span> (no binding)</h4>
        <div class="flex gap-4 items-center">
            <span>{{$todo}}</span>
            <input type="text" value="{{$todo}}">
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', function () {
            @this.$set('title', @this.title + ' (modified by JS)');
        })
    </script>
</div>
