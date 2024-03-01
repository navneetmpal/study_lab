<table>
    <tr>
        <th style="border: 1px solid black;">Name</th>
        <th style="border: 1px solid black;">Subject name</th>
        <th style="border: 1px solid black;">From class</th>
        <th style="border: 1px solid black;">To class</th>
        <th style="border: 1px solid black;">Contact</th>
        <th style="border: 1px solid black;">Address</th>
    </tr>
    <tr>
        <td style="border: 1px solid black;">{{ $details['name'] }}</td>
        <td style="border: 1px solid black;">{{ $details['subject'] }}</td>
        <td style="border: 1px solid black;">{{ $details['minclass'] }}</td>
        <td style="border: 1px solid black;">{{ $details['maxclass'] }}</td>
        <td style="border: 1px solid black;">{{ $details['contact'] }}</td>
        <td style="border: 1px solid black;">{{ $details['address'] }}</td>
    </tr>
</table>
<p>
   {{ $details['name'] }} is applied for job as a {{ $details['subject'] }} teacher. {{ $details['name'] }} can teach from {{ $details['minclass'] }}  class to {{ $details['maxclass'] }} class. {{ $details['name'] }}'s contact number is {{ $details['contact'] }} and address is {{ $details['address'] }}. please contact his as soon as posible.

</p>
                
                <p>Thank you</p>
            
