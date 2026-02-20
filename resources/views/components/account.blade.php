
<x-layouts::app :title="__('Dashboard')">
     <div> 
          @foreach ($user as $users)<b>{{$users->email}}</b>@endforeach
       </div>
</x-layouts::app>




