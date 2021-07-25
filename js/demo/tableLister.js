// Call the dataTables jQuery plugin
$('#hTable').DataTable({
  ajax: {
    url: 'historicalTables.json',
    dataSrc: "data"
  },
  columns: [
    { data: 'att_id' },
    { data: 'att_name' },
    { data: 'att_loc' },
    { data: 'att_date' },
  ],
  "pageLength": 10
});