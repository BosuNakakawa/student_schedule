<div class="container mt-3">
    <div class="w-95 w-md-75 w-lg-60 w-xl-55 mx-auto mb-6 text-center">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="schedule-table">
                <table class="table bg-white">
                    <tbody id="table-content">
                    <td class="day">จันทร์</td>
                    @foreach($days as $day)
                        <td class="active">
                            <h4> {{ $day->number }} </h4>
                            <p> {{ $day->time }} </p>
                        </td>
                    @endforeach
                    </tbody>
                    <tbody id="table-content">
                    <td class="day">อังคาร</td>
                    @foreach($days as $day)
                        <td class="active">
                            <h4> {{ $day->number }} </h4>
                            <p> {{ $day->time }} </p>
                        </td>
                    @endforeach
                    </tbody>
                    <tbody id="table-content">
                    <td class="day">พุธ</td>
                    @foreach($days as $day)
                        <td class="active">
                            <h4> {{ $day->number }} </h4>
                            <p> {{ $day->time }} </p>
                        </td>
                    @endforeach
                    </tbody>
                    <tbody id="table-content">
                    <td class="day">พฤหัสบดี</td>
                    @foreach($days as $day)
                        <td class="active">
                            <h4> {{ $day->number }} </h4>
                            <p> {{ $day->time }} </p>
                        </td>
                    @endforeach
                    </tbody>
                    <tbody id="table-content">
                    <td class="day">ศุกร์</td>
                    @foreach($days as $day)
                        <td class="active">
                            <h4> {{ $day->number }} </h4>
                            <p> {{ $day->time }} </p>
                        </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
