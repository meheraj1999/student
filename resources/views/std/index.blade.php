<a href="{{route('em.create')}}">Add New</a>
<table class="table">
  <thead>

     <tr>
      <th scope="row">sl no</th>
      <td>name</td>
      <td>roll</td>
      <td>depertment</td>
      <td>institute</td>
      <td>contact</td>
    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
@foreach($student as $students)

    <tr>
       <tr>
      <th scope="col">{{$i++}}</th>
      <th scope="col">{{$students->name}}</th>
      <th scope="col">{{$students->roll}}</th>
      <th scope="col">{{$students->depertment}}</th>
      <th>{{$students->institutte}}</th>
      <th>{{$students->contact}}</th>
    </tr>
    </tr>
  </tbody>
  @endforeach
</table>

