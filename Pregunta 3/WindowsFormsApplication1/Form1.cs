using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        int x, y;
        bool flag;
        int cont = 0;
        int mR, mG, mB;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Todos |*.*|Archivos JPEG|*.jpg|Archivos GIF|*.gif";
            openFileDialog1.FileName = "";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            if (flag) {

                SqlConnection con = new SqlConnection();
                SqlCommand cmd = new SqlCommand();
                con.ConnectionString = "server=(local);database=imagenes;user=inf324;pwd=123456";
                con.Open();
                cmd.Connection = con;

                x = e.X;
                y = e.Y;
                Color c = new Color();
                c = bmp.GetPixel(x, y);

                //mR = 0;
                //mG = 0;
                //mB = 0;

                //for (int i = x; i < x + 10; i++)
                //{
                //    for (int j = y; j < y + 10; j++)
                //    {
                //        c = bmp.GetPixel(i, j);
                //        mR = mR + c.R;
                //        mG = mG + c.G;
                //        mB = mB + c.B;
                //    }
                //}

                //mR = mR / 100;
                //mG = mG / 100;
                //mB = mB / 100;

                if (cont < 3)
                {

                    if (cont == 0)
                    {
                        textBox1.Text = c.R.ToString();
                        textBox2.Text = c.G.ToString();
                        textBox3.Text = c.B.ToString();
                        cmd.CommandText = "INSERT INTO datos VALUES('" + textBox1.Text + "','" + textBox2.Text + "','" + textBox3.Text + "')";
                        cmd.ExecuteNonQuery();
                        con.Close();
                    }

                    if (cont == 1)
                    {
                        textBox4.Text = c.R.ToString();
                        textBox5.Text = c.G.ToString();
                        textBox6.Text = c.B.ToString();
                        cmd.CommandText = "INSERT INTO datos VALUES('" + textBox4.Text + "','" + textBox5.Text + "','" + textBox6.Text + "')";
                        cmd.ExecuteNonQuery();
                        con.Close();
                    }

                    if (cont == 2)
                    {
                        textBox7.Text = c.R.ToString();
                        textBox8.Text = c.G.ToString();
                        textBox9.Text = c.B.ToString();
                        cmd.CommandText = "INSERT INTO datos VALUES('" + textBox7.Text + "','" + textBox8.Text + "','" + textBox9.Text + "')";
                        cmd.ExecuteNonQuery();
                        con.Close();
                    }

                    cont = cont + 1;

                }
                else {
                    flag = false;
                }
            }
            
        }

        private void button2_Click(object sender, EventArgs e)
        {
            flag = true;
            cont = 0;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local);database=imagenes;user=inf324;pwd=123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "Select * from datos";
            DataTable dt = new DataTable();
            ada.Fill(dt);
            
            int[] cR = new int [3];
            int[] cG = new int [3];
            int[] cB = new int [3];

            for (int z = 0; z < 3; z++)
            {            
                cR[z] = int.Parse(dt.Rows[z][0].ToString());
                cG[z] = int.Parse(dt.Rows[z][1].ToString());
                cB[z] = int.Parse(dt.Rows[z][2].ToString());
            }

            int mRn = 0, mGn = 0, mBn = 0;
            Color c = new Color();
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
               
                for (int i = 0; i < bmp.Width - 10; i = i + 10)
                {
                    for (int j = 0; j < bmp.Height - 10; j = j + 10)
                    {
                        for (int i2 = i; i2 < i + 10; i2++)
                        {
                            for (int j2 = j; j2 < j + 10; j2++)
                            {
                                c = bmp.GetPixel(i2, j2);
                                mRn = mRn + c.R;
                                mGn = mGn + c.G;
                                mBn = mBn + c.B;
                            }
                        }

                        mRn = mRn / 100;
                        mGn = mGn / 100;
                        mBn = mBn / 100;

                        if (((cR[0] - 10 <= mRn) && (mRn <= cR[0] + 10)) &&
                            ((cG[0] - 10 <= mGn) && (mGn <= cG[0] + 10)) &&
                            ((cB[0] - 10 <= mBn) && (mBn <= cB[0] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                            {
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Red);
                                }
                            }

                        }

                        else if (((cR[1] - 10 <= mRn) && (mRn <= cR[1] + 10)) &&
                            ((cG[1] - 10 <= mGn) && (mGn <= cG[1] + 10)) &&
                            ((cB[1] - 10 <= mBn) && (mBn <= cB[1] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                            {
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Green);
                                }
                            }

                        }

                        else if (((cR[2] - 10 <= mRn) && (mRn <= cR[2] + 10)) &&
                        ((cG[2] - 10 <= mGn) && (mGn <= cG[2] + 10)) &&
                        ((cB[2] - 10 <= mBn) && (mBn <= cB[2] + 10)))
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                            {
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    bmp2.SetPixel(i2, j2, Color.Blue);
                                }
                            }

                        }
                        else
                        {
                            for (int i2 = i; i2 < i + 10; i2++)
                            {
                                for (int j2 = j; j2 < j + 10; j2++)
                                {
                                    c = bmp.GetPixel(i2, j2);
                                    bmp2.SetPixel(i2, j2, Color.FromArgb(c.R, c.G, c.B));

                                }
                            }
                        }
                    }
                }
                pictureBox1.Image = bmp2;
            }

        private void label1_Click(object sender, EventArgs e)
        {

        }
            
        }

    
}
