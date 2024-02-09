<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <style type="text/css">
          <![CDATA[
            table {
              border-collapse: collapse;
              width: 50%;
              margin: 20px auto;
              font-family: Arial, sans-serif;
              background-color: #f0f0f0;
            }
            
            th, td {
              border: 1px solid #ccc;
              padding: 8px;
              text-align: left;
            }
            
            th {
              background-color: #3498db;
              color: white;
            }
            
            tr:nth-child(even) {
              background-color: #f2f2f2;
            }
            
            tr:nth-child(odd) {
              background-color: #fff;
            }
          ]]>
        </style>
      </head>
      <body>
        <table>
          <xsl:for-each select="TableData/Row">
            <tr>
              <xsl:for-each select="Cell">
                <td>
                  <xsl:value-of select="." />
                </td>
              </xsl:for-each>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
