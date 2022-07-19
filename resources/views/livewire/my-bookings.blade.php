<div class="row g-4">
    @if (Session::has('booked'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <small>Booking made SuccessfullY!, <span class="text-danger">Please pay Before the end of two days..</span></small>
        </div>
    @endif
    @if (Session::has('ipo'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <small>You have Arleady Booked this Property...</small>
        </div>
    @endif
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">Property</th>
                            <th class="cell">Property ID</th>
                            <th class="cell">Location</th>
                            <th class="cell">Purpose</th>
                            <th class="cell">Price</th>
                            <th class="cell">Status</th>
                            <th class="cell">Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($my_bookings as $booking)
                            <tr>
                                <td class="cell"><img src="{{ asset('storage/' . $booking->house->photos) }}"
                                        class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                <td class="cell"><span class="truncate">{{ $booking->house->regNumber }}</span></td>
                                <td class="cell"><span
                                        class="truncate">{{ $booking->house->district . ', ' . $booking->house->region }}</span>
                                </td>
                                <td class="cell"><span
                                        class="truncate text-danger">{{ ucwords($booking->house->purpose) }}</span>
                                </td>
                                <td class="cell"><span class="truncate">Tsh
                                        {{ number_format($booking->house->price) }}/=</span></td>
                                <td class="cell"><span
                                        class="truncate text-success">{{ ucwords($booking->status) }}</span></td>
                                <td class="cell d-flex">
                                    <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i
                                            class="mdi mdi-delete text-danger"></i></a>
                                    <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i
                                            class="mdi mdi-check-all text-success"></i>Make payment</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
