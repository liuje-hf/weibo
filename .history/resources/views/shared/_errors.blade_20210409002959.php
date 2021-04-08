@if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors-> as error)
          <li>{{ $error }}</li>
      @endforeach
    </div>
@endif
