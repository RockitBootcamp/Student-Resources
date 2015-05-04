<!-- file: /resources/views/user/form.blade.php -->

<form action="/user/process_form" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="user_id" value="{{ $user_id or '' }}">
	<div>First Name: <input type="text" name="first_name" value="{{ $first_name or '' }}"></div>
	<div>Last Name: <input type="text" name="last_name" value="{{ $last_name or '' }}"></div>
	<div>Email: <input type="email" name="email" value="{{ $email or '' }}"></div>
	<div>Gender:
		<select name="gender">
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
	</div>
	<button>Submit</button>
</form>
