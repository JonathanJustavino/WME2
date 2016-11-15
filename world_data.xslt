<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
  <body>
    <table border="1">
      <thead>
        <tr bgcolor="#9acd32">
          <th style="text-align:left">ID</th>
          <th style="text-align:left">Name</th>
          <th style="text-align:left">Birth Rate/ 1000</th>
          <th style="text-align:left">Cell Phones / 100</th>
          <th style="text-align:left">Children / Woman</th>
          <th style="text-align:left">Electricity Consumption / Capita</th>
          <th style="text-align:left">GdP / Capita</th>
          <th style="text-align:left">GdP / Capita growth </th>
          <th style="text-align:left">Inflation Annual</th>
          <th style="text-align:left">Internet User / 100</th>
          <th style="text-align:left">Life Expectancy</th>
          <th style="text-align:left">Military Expenditure Percent of GdP</th>
          <th style="text-align:left">GPS Latitude</th>
          <th style="text-align:left">GPS Longtitude</th>
        </tr>
      </thead>
      <tbody>
        <xsl:for-each select="countries/country">
        <tr>
          <td><xsl:value-of select="id"/></td>
          <td><xsl:value-of select="name"/></td>
          <td><xsl:value-of select="birthrateper1000"/></td>
          <td><xsl:value-of select="cellphonesper1000"/></td>
          <td><xsl:value-of select="childrenperwoman"/></td>
          <td><xsl:value-of select="electricityconsumptionpercapita"/></td>
          <td><xsl:value-of select="gdp_per_capita"/></td>
          <td><xsl:value-of select="gdp_per_capita_growth"/></td>
          <td><xsl:value-of select="inflationannual"/></td>
          <td><xsl:value-of select="internetuserper100"/></td>
          <td><xsl:value-of select="lifeexpectancy"/></td>
          <td><xsl:value-of select="militaryexpenditurepercentofgdp"/></td>
          <td><xsl:value-of select="gps_lat"/></td>
          <td><xsl:value-of select="gps_long"/></td>
        </tr>
        </xsl:for-each>
      </tbody>
    </table>
  </body>
</html>
</xsl:template>
</xsl:stylesheet>
