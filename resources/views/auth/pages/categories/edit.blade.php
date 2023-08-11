<x-auth-layout pageTitle="Update Category">

    <div class="row">
        <div class="col-md-12 mx-auto">
            <x-front.form action="{{route('categories.update', $data->id)}}" enctype="true">
                @method('PUT')
                
                <x-front.input-field type="text" name="name" id="name" place="Enter category name" val="{{$data->name}}" required="true"/>
                <x-front.input-field type="file" name="images[]" id="images" place="" val="" required="true"/>
                <x-front.input-button btnClass="" btnType="submit" btnValue="Submit" />
            </x-front.form>
        </div>
    </div>
</x-auth-layout>
