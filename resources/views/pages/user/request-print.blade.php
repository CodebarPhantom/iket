<style>
    .container-title {
        text-align: center
    }

    .title {
        font-size: 14px !important;
        font-weight: 700;
        padding: 2px;
    }

    .description {
        height: 70px;
        border: 1px solid black;
        vertical-align: top
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }

    tr,
    td {
        padding: 4px;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IKET - Print Request</title>
</head>
<body>
  <table style="width: 100%;">
    <tbody>
        <tr style="height: 142px; padding: 0;">
            <td style="width: 50%; height: 142px;">
                <table style="width: 100%; height: 140px; border: 1px solid black;">
                    <tbody>
                        <tr>
                            <td class="container-title">
                                <div class="title">Form Permohonan Perbaikan</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 266px;">
                              &nbsp;* : Harus ditandatangani <br><br>
                              ID: {{ $item->id }}
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50%; border: 1px solid black;">&nbsp;Pemohon&nbsp; &nbsp;
                                                &nbsp; &nbsp;: {{ $item->client_name }}</td>
                                            <td style="width: 50%; border: 1px solid black;">&nbsp;Tgl. Target&nbsp;
                                                &nbsp; &nbsp; &nbsp;: </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;">&nbsp;Kode Dept&nbsp; &nbsp; &nbsp;:
                                                {{ $item->department_id }}</td>
                                            <td style="border: 1px solid black;">&nbsp;Tgl. Selesai&nbsp; &nbsp; &nbsp;
                                                : </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;">&nbsp;Tgl. Mohon&nbsp; &nbsp; :
                                                {{ $item->request_created_date }}</td>
                                            <td style="border: 1px solid black;">&nbsp;Teknisi&nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; : </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;" colspan="2">&nbsp;Jenis Kerusakan&nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                &nbsp; &nbsp;
                                                : {{ $item->break_type->name }}
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 266px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td class="description">
                                                Deskripsi : <br>
                                                {{ $item->description }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 266px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 25%; border: 1px solid black;">&nbsp;Pemohon *</td>
                                            <td style="width: 25%; border: 1px solid black;">&nbsp;Kabag Pemohon *</td>
                                            <td style="width: 25%; border: 1px solid black;">&nbsp;Teknisi MIS</td>
                                            <td style="width: 25%; border: 1px solid black;">&nbsp;Kabag MIS</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;">
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                            </td>
                                            <td style="border: 1px solid black;">&nbsp;</td>
                                            <td style="border: 1px solid black;">&nbsp;</td>
                                            <td style="border: 1px solid black;">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Lembar 1 (Untuk IT/MIS)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 50%; height: 142px;">
              <table style="width: 100%; height: 140px; border: 1px solid black;">
                <tbody>
                    <tr>
                        <td class="container-title">
                            <div class="title">Form Permohonan Perbaikan</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 266px;">
                          &nbsp;* : Harus ditandatangani <br><br>
                          ID: {{ $item->id }}
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%; border: 1px solid black;">&nbsp;Pemohon&nbsp; &nbsp;
                                            &nbsp; &nbsp;: {{ $item->client_name }}</td>
                                        <td style="width: 50%; border: 1px solid black;">&nbsp;Tgl. Target&nbsp;
                                            &nbsp; &nbsp; &nbsp;: </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black;">&nbsp;Kode Dept&nbsp; &nbsp; &nbsp;:
                                            {{ $item->department_id }}</td>
                                        <td style="border: 1px solid black;">&nbsp;Tgl. Selesai&nbsp; &nbsp; &nbsp;
                                            : </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black;">&nbsp;Tgl. Mohon&nbsp; &nbsp; :
                                            {{ $item->request_created_date }}</td>
                                        <td style="border: 1px solid black;">&nbsp;Teknisi&nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; : </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black;" colspan="2">&nbsp;Jenis Kerusakan&nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                            &nbsp; &nbsp;
                                            : {{ $item->break_type->name }}
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 266px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td class="description">
                                            Deskripsi : <br>
                                            {{ $item->description }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 266px;">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; border: 1px solid black;">&nbsp;Pemohon *</td>
                                        <td style="width: 25%; border: 1px solid black;">&nbsp;Kabag Pemohon *</td>
                                        <td style="width: 25%; border: 1px solid black;">&nbsp;Teknisi MIS</td>
                                        <td style="width: 25%; border: 1px solid black;">&nbsp;Kabag MIS</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black;">
                                            <p>&nbsp;</p>
                                            <p>&nbsp;</p>
                                            <p>&nbsp;</p>
                                        </td>
                                        <td style="border: 1px solid black;">&nbsp;</td>
                                        <td style="border: 1px solid black;">&nbsp;</td>
                                        <td style="border: 1px solid black;">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td>
                                            Lembar 2 (Untuk Disimpan / Cadangan)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
