<form action="{{route('site.contatos')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">nome </label>
        <input type="text" value="{{old('name')}}" class="form-control" id="name" placeholder="Nome" name="name">
        @if($errors->has('name'))<p class="erro">{{$errors->first('name')}}</p> @endif
    </div>
    <div class="form-group">
        <label for="email">Email </label>
        <input type="text" value="{{old('email')}}" class="form-control" id="email" placeholder="Email" name="email">
        @if($errors->has('email'))<p class="erro">{{$errors->first('email')}}</p> @endif
    </div>
    <div class="form-group">
        <label for="cellphone">telefone</label>
        <input type="number" value="{{old('telefone')}}" class="form-control" id="cellphone" placeholder="telefone" name="telefone">
        @if($errors->has('telefone'))<p class="erro">{{$errors->first('telefone')}}</p> @endif
    </div>
    <div class="form-group">
        <label for="reason">Motivo</label>
        <input type="text" value="{{old('motivo')}}" class="form-control" id="reason" placeholder="qual o motivo do contato" name="motivo">
        @if($errors->has('motivo'))<p class="erro">{{$errors->first('motivo')}}</p> @endif
    </div>
    <button class="btn btn-dark rounded-pill px-3" type="submit">Submit</button>
</form>