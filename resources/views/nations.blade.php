

<table border="1">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Capital
            </th>
            <th>
                Ruler
            </th>
        </tr>
    </thead>
    <tbody> 
        @if (!empty($nations))
            @foreach($nations as $nation)
            <tr>
                <td>
                    {{ $nation->id }} 
                </td>
                <td>
                    {{ $nation->name }} 
                </td>
                <td>
                    {{ $nation->description }} 
                </td>
                <td>
                    {{ $nation->capital }} 
                </td>
                <td>
                    {{ $nation->ruler_name }} 
                </td>
            </tr>    
            @endforeach

        @endif
    </tbody>
</table>