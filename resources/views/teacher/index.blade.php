<a href="{{route('emo.create')}}">Add New</a>
<table class="table" >
  <thead>
    <tr>   
      <th scope="row">sl no</th>
      <td>name</td>
      <td>post</td>
      <td>salary</td>
      <td>address</td> 
      <td>contact</td>
    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
@foreach($teacher as $teachers);


  <tr>
  	<tr>
  	  <th scope="col">{{$i++}}</th>
      <th scope="col">{{$teachers->name}}</th>
      <th scope="col">{{$teachers->post}}</th>
      <th scope="col">{{$teachers->salary}}</th>
      <th>{{$teachers->address}}</th>
      <th>{{$teachers->contact}}</th>
  	</tr>
  </tr>
  @endforeach
</tbody>
</table>
