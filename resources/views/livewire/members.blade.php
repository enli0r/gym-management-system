<div>
    <div class="members">
        <h1>All members</h1>


        <div class="members-container">
            <table class="members-table">
                <tr>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>JMBG</th>
                    <th>Email</th>
                    <th>Started</th>
                    <th>Ended</th>
                    <th>Is active</th>
                </tr>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->first_name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->jmbg }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->date_started }}</td>
                        <td>{{ $member->date_ended }}</td>
                        <td>{{ $member->is_active }}</td>
                        
                    </tr>
                @endforeach  
            </table>
        </div>

       
    </div>
      
</div>
