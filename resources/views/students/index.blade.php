<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>生徒一覧</h1>
    <form name="student" method="GET">
        <input type="text" name="search" value="{{ old('search') }}"/>
        <button type="submit">検索</button>
    </form>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>生徒名</th>
            <th>持ち物</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>
                    @foreach ($student->items as $item)
                        {{ $item->name }}<br />
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>

    {{ $students->links() }}
</body>