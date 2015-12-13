<div data-ng-controller="TimeSheetsController as timesheet">
    <hot-table
            settings="timesheet.settings"
            row-headers="timesheet.rowHeaders"
            min-spare-rows="timesheet.minSpareRows"
            datarows="timesheet.db.items"
            height="300"
            width="700">
        <hot-column data="id" title="'ID'"></hot-column>
        <hot-column data="name.first" title="'First Name'" type="'text'" read-only></hot-column>
        <hot-column data="name.last" title="'Last Name'" read-only></hot-column>
        <hot-column data="address" title="'Address'" width="150"></hot-column>
        <hot-column data="product.description" title="'Favorite food'" type="'autocomplete'">
            <hot-autocomplete datarows="description in product.options"></hot-autocomplete>
        </hot-column>
        <hot-column data="price" title="'Price'" type="'numeric'" width="80" format="'$ 0,0.00'"></hot-column>
        <hot-column data="isActive" title="'Is active'" type="'checkbox'" checked-template="'Yes'"
                    unchecked-template="'No'"></hot-column>
    </hot-table>
</div>