 
<x-layouts::app :title="__('Dashboard')">
     <div> 
          

<flux:table>
    <flux:table.columns>
        <flux:table.column>Product</flux:table.column>
         <flux:table.column>image</flux:table.column>
        <flux:table.column>Price</flux:table.column>
        <flux:table.column>active</flux:table.column>
         
        <flux:table.column>Action</flux:table.column>
        
        
        

    </flux:table.columns>
    <flux:table.rows>

     @foreach ($user->posts as $result)

        <flux:table.row>
            <flux:table.cell>{{$result->name}}</flux:table.cell>
            <flux:table.cell>{{ $result->image}}</flux:table.cell>
            <flux:table.cell><flux:badge size="sm" inset="top bottom">{{$result->price}}</flux:badge></flux:table.cell>
            <flux:table.cell><flux:badge color="" size="sm" inset="top bottom">{{$result->is_active}}</flux:badge></flux:table.cell><flux:table.cell><flux:badge color="" size="sm" inset="top bottom">
            <a href="{{route('edit',$result->id)}}"><img style="backgrount:none"; width="15" height="15" src="https://img.icons8.com/ios/50/228BE6/create-new.png" alt="create-new"/></a></flux:badge></flux:table.cell>
            <flux:table.cell><flux:badge color="red" size="sm" inset="top bottom">
            <a href="{{route('delete',$result->id)}}"><img width=15 heigh=15 src="https://img.icons8.com/?size=100&id=1942&format=png&color=FA5252"></a></flux:badge></flux:table.cell>
            
            
            
        </flux:table.row>
     @endforeach

    </flux:table.rows>
</flux:table>

<!-- $orders = \App\Models\Order::paginate(5) -->

<flux:table>
    <!-- ... -->
</flux:table>

</div>
</x-layouts::app>