<div>
    @foreach($schools as $school)
        <x-school-component :school="$school"/>
    @endforeach
    <div class="bg-white border-t py-2 flex justify-center">
        {!! $schools->render('custom-pagination') !!}
    </div>
</div>