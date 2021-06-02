<h1>About page</h1>

@auth
    Welkom {{\Auth::user()->name}}!

    <form method="POST" action="{{route('blogs.store')}}">
        @csrf // beschermt tegen input van andere bronnen
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="opslaan">
    </form>

    @endauth

@guest()
    Dag gast, maak een account aan!
@endguest
