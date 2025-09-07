<x-layout>
@section('title', 'Create Ninja')

    <h2>Create New Ninja</h2>
    <form action="/ninjas" method="POST">
        @csrf
        <label for="name">Ninja Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Ninja Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Add Ninja</button>
    </form>
</x-layout>