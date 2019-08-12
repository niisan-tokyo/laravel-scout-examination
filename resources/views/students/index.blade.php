<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h1>生徒一覧</h1>
    <form name="student" method="GET">
        <input type="text" name="search" />
        <button type="submit">検索</button>
    </form>
    <table>
        <th>
            <td>ID</td>
            <td>生徒名</td>
            <td>持ち物</td>
        </th>
        @foreach ($students as $student)
            <tr>
                <td>$student->id</td>
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