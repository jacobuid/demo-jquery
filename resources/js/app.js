import './bootstrap';
import 'jquery-ui/dist/jquery-ui';

import DataTable from 'datatables.net';
window.DataTable = DataTable;

// Sortable
$( function() {
      $("#sortable").sortable();
      $("#sortable").disableSelection();
      $('#example-table').DataTable();
});