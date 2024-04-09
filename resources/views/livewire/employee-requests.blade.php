<div>
    <table>
        <tr>
            <td>Gerente</td>
            <td>Empleado</td>
        </tr>
        @forelse ($solicitudes as $solicitud)
            <td>{{ $solicitud->manager->names }}</td>
            <td>{{ $solicitud->employee->names }}</td>
        @empty
        @endforelse
    </table>

</div>
