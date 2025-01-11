<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    @auth
    <div>Logged in!</div>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    @else
    <div>
        <h1>Register Account</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Username">
            <input type="text" name="email" placeholder="Enter Email Address">
            <input type="password" name="password" placeholder="Enter Password">
            <button>Register</button>
        </form>
    </div>
    <div>
        <h1>Login Account</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginName" placeholder="Enter Username">
            <input type="password" name="loginPassword" placeholder="Enter Password">
            <button>Login</button>
        </form>
    </div>
    @endauth
</x-layout>