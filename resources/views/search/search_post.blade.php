<table>
	@php $i = 1; @endphp
	@forelse($search_posts as $post)
        <tr class="mt-3 d-block">
        	<td class="px-4" style="color: black; font-size: 20px;">{{$i++}}.</td>
            <td class=" px-4"><a style="border-bottom: 1px solid black; font-size: 20px;  " href="{{ url('page/blog') }}/{{ $post->id }}">{{$post->title}}</a></td>
        </tr>
       @empty
    	<strong style="color: #f00" class="ml-4">No Post Found</strong>
	@endforelse
</table> 