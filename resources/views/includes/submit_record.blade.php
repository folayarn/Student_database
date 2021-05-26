@if ($message = Session::get('success'))
    <div class="alert alert-success"  role="alert" >

          {{ $message }}

    </div>
    @endif
    <form action="{{ route('post') }}" method="POST" class="form">
        @csrf
<div class="form-group">
<label>Full Name </label>
<input type="text" name="full_name" class="form-control" required />
</div>
<div class="form-group">
    <label>Gender</label>
    <select class="form-control" name="gender" required>
        <option selected disabled>Select Option</option>

<option value="male">Male</option>
<option value="female">Female</option>
<option value="trans_gender">Trans Gender</option>

    </select>
    </div>
    <div class="form-group">
        <label>Course </label>
        <input type="text" name="course" class="form-control" required />
        </div>

        <div class="form-group">
            <label>Age <span id="display_age"> </span></label>
            <input type="range" name="age" id="age"  class="form-control" required />
            </div>
            <div class="form-group">
                <label>Phone Number </label>
                <input type="tel" name="tel" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Address </label>
                    <textarea rows="2" cols="10" class="form-control" required name="address"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-success right" type="submit">Register Student </button>
                        </div>


    </form>


