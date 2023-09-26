<form action="{{route('site.contatos')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">nome </label>
        <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email </label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="cellphone">telefone</label>
        <input type="text" class="form-control" id="cellphone" placeholder="telefone" name="telefone">
    </div>
    <div class="form-group">
        <label for="reason">Motivo</label>
        <input type="text" class="form-control" id="reason" placeholder="qual o motivo do contato" name="motivo">
    </div>
    <button class="btn btn-dark rounded-pill px-3" type="submit">Submit</button>
</form>