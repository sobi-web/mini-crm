<div class="row">

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="name"
                   @class([ 'form-control ' , 'is-invalid' => $errors->has('name')  ])  value="{{ old('name' ,  $customer->name ) }}">
            @error('name') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="last_name"
                   @class([ 'form-control ' , 'is-invalid' => $errors->has('last_name')  ])  value="{{old('last_name' ,  $customer->last_name )}}">
            @error('last_name') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email"
                   @class([ 'form-control ' , 'is-invalid' => $errors->has('email')  ])  value="{{  old('email' ,  $customer->email ) }}">
            @error('email') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone"
                   @class([ 'form-control ' , 'is-invalid' => $errors->has('phone')  ])  value="{{ old('phone' ,  $customer->phone ) }}">
            @error('phone') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Credit Card</label>
            <input type="text" name="card_number"
                   @class([ 'form-control ' , 'is-invalid' => $errors->has('card_number')  ]) value="{{ old('card_number' ,  $customer->card_number ) }}">
            @error('card_number') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Biography</label>
            <textarea
                name="about" @class([ 'form-control ' , 'is-invalid' => $errors->has('about')  ])> {{ old('about' ,  $customer->about ) }} </textarea>
            @error('about') <p class="text-danger"> {{$message}}</p> @enderror
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> {{ $button_title ?? 'Create' }}</button>
    </div>
</div>
