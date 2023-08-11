<x-auth-layout pageTitle="{{__('Create Category')}}">

    <div class="row">
        <div class="col-md-12 mx-auto">
            <x-front.form action="{{route('categories.store')}}" enctype="true">
                <x-front.input-field type="file" name="images[]" id="images" place="" val="" required="true"/>
                <x-front.input-field type="text" name="name" id="name" place="Enter category name" val="" required="true"/>
                <x-front.input-button btnClass="" btnType="submit" btnValue="Submit" />
            </x-front.form>
        </div>
    </div>
</x-auth-layout>
