<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <body>
            <h1 style="text-align:center">Practica 4-Muebleria Equipo 9</h1>
        <table style="border: 5px solid black; padding:10px; margin:0 auto;">
            <tr>
                 <th colspan="4" style="text-align: center; color: white; font-size: 24px; background-color: #423232">Muebleria</th>
            </tr>
            <tr style="color: black; font-weight: bold; text-align: center; font-size: 20px; background-color: #978181">
                <th>Color</th>
                <th>Tamaño</th>
                <th>Material</th>
                <th>Precio</th>
            </tr>
            <xsl:for-each select="muebleria/mueble">

                <!-- MOSTRAR TODOS LOS ELEMENTOS -->
                <!--
                <tr style="color: #423232">
                    <td><xsl:value-of select="color"/></td>
                    <td><xsl:value-of select="tamaño"/></td>
                    <td><xsl:value-of select="material"/></td>
                    <td style="color: yellow"><xsl:value-of select="precio"/></td>
                </tr>
                -->

                <!-- MOSTRAR SOLO LOS PRECIOS MAYORES A 2500 -->
                <!--
                <xsl:if test="precio &gt; 2500">
                    <tr style="color: #423232">
                        <td><xsl:value-of select="color"/></td>
                        <td><xsl:value-of select="tamaño"/></td>
                        <td><xsl:value-of select="material"/></td>
                        <td style="color: yellow"><xsl:value-of select="precio"/></td>
                    </tr>
                </xsl:if>
                -->

                <!-- MOSTRAR SOLO SILLAS CON TEXTO COLOR VERDE -->
                <!--
                <xsl:if test="@tipo='silla'">
                    <tr style="color: green">
                        <td><xsl:value-of select="color"/></td>
                        <td><xsl:value-of select="tamaño"/></td>
                        <td><xsl:value-of select="material"/></td>
                        <td><xsl:value-of select="precio"/></td>
                    </tr>
                </xsl:if>
                -->
                
                <!-- MOSTRAR SOLO SILLAS CON TEXTO COLOR VERDE -->
                <!--
                <xsl:if test="@tipo='cama'">
                    <tr style="color: red">
                        <td><xsl:value-of select="color"/></td>
                        <td><xsl:value-of select="tamaño"/></td>
                        <td><xsl:value-of select="material"/></td>
                        <td><xsl:value-of select="precio"/></td>
                    </tr>
                </xsl:if>
                -->

            </xsl:for-each>
        </table>
        </body>
    </html>    

</xsl:template>
</xsl:stylesheet>