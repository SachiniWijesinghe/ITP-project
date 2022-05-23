<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Your Name</th>
                                        <th>Email</th>
                                        <th>Overall Experience</th>
                                        <th>Timely Response</th>
                                        <th>Our Support</th>
                                        <th>Overall Satisfaction</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Overall_Experience }}</td>
                                        <td>{{ $item->Timely_Response }}</td>
                                        <td>{{ $item->Our_Support }}</td>
                                        <td>{{ $item->Overall_Satisfaction }}</td>
                                        <td>{{ $item->Comment }}</td>
 
                                @endforeach
                                </tbody>
                            </table>
                        </div>