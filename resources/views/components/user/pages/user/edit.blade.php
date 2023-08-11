<x-front.card>
  <x-front.form action="{{route('updatemyprofile')}}">
@method('PUT')
<div class="col-md-4">
    <label for="name" class="form-label">Full name</label>
    <x-front.input-field type="text" name="name" id="name" place="Enter Full Name" val="{{$compoData->name}}" required="true" />
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">e-Mail</label>
    <x-front.input-field type="email" name="email" id="email" place="Enter your email" val="{{$compoData->email}}" extraAttributes="readonly" required="true" />
  </div>
  <div class="col-md-4">
    <label for="username" class="form-label">Username</label>
    <x-front.input-field type="text" name="username" id="username" place="Enter your username" val="{{$compoData->username}}" required="true" />
  </div>
  <div class="col-12">
    <x-front.input-button btnType="submit" btnValue="Update Profile" btnClass=""/>
  </div>
  </x-front.form>
</x-front.card>