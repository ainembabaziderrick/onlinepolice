<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        .horizontal-table {
            display: grid;
            width: 100%;
            grid-template-columns: repeat(8, 1fr); /* 8 equal columns */
            gap: 10px;
            align-items: center;
        }
        .horizontal-row {
            display: contents; /* Allow cells to be part of the grid */
        }
        .horizontal-row div {
            padding: 10px;
            text-align: left; /* Ensure left alignment for all cells */
            border-bottom: 1px solid #ccc;
        }
        .header-row div {
            font-weight: bold;
            background-color: #f2f2f2;
            border-bottom: 2px solid #000;
        }
        .data-row div {
            align-self: center; /* Center align items vertically */
        }
    </style>
</head>
<body>
    <h2>Title: {{ $title }}</h2>
    <h2>Date: {{ $date }}</h2>

    <div class="horizontal-table">
        <div class="horizontal-row header-row">
            <div>ID</div>
            <div>Victim Name</div>
            <div>Crime</div>
            <div>Offender Name</div>
            <div>Description</div>
            <div>Location</div>
            <div>Time</div>
            <div>Date</div>
        </div>

        @foreach($cases as $value)
        <div class="horizontal-row data-row">
            <div>{{$value->id}}</div>
            <div>{{$value->victim_name}}</div>
            <div>{{ !empty($value->getCrimeType->crime_type) ? $value->getCrimeType->crime_type : '' }}</div>
            <div>{{$value->offender_name}}</div>
            <div>{{$value->description}}</div>
            <div>{{$value->location}}</div>
            <div>{{$value->time}}</div>
            <div>{{$value->date}}</div>
        </div>
        @endforeach
    </div>
</body>
</html>
