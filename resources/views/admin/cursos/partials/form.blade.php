@csrf()

<input type="text" placeholder="Nome" name="nome" value="{{ $curso->nome ?? old('nome') }}">
<textarea name="body" id="" cols="30" rows="10" placeholder="Descrição">{{ $curso->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>